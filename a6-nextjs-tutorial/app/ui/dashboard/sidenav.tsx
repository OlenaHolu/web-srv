'use client'

import clsx from "clsx";
import Link from "next/link";
import { usePathname } from "next/navigation";

function SideNavItem({path, title}) {
    const activePath = usePathname();
    return (
        <Link href={path}
            className={clsx("font-bold text-red-800", {
                "bg-blue-300": activePath === path
            })}>{title}</Link>
    )
}

export default function SideNav() {
    return (
        <>
            <nav className="bg-gray-300 h-screen p-8 flex flex-col ">
                <SideNavItem path="/dashboard" title="Home" />
                <SideNavItem path="/dashboard/customers" title="Customers" />
                <SideNavItem path="/dashboard/invoices" title="Invoices" />
            </nav>
        </>
    );
}
